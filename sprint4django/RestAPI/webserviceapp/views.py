from django.shortcuts import render
"""Aquí importamos JsonResponse que nos sirve para poder ejecutar código Json en Django y
HttpResponse se utiliza para indicar  Django que el contenido a enviar por HTTP será un HTML"""
from django.http import HttpResponse, JsonResponse

"""Aquí importamos las tablas de nuestra base de datos mysitedb que se encuentran en el archivo models"""
from .models import Tjuegos, Tcomentarios
from django.views.decorators.csrf import csrf_exempt
import json


# Create your views here.

"""Función que se realiza a modo de prueba para comprobar que funciona"""
def pagina_de_prueba(request):
	return HttpResponse("<h1>Primera página</h1>");

"""Función que nos devuelve todos los datos de la tabla Tjuegos en formato Json"""
def devolver_juegos(request):
	lista = Tjuegos.objects.all()
	respuesta_final = []
	for fila_sql in lista:
		diccionario = {}
		diccionario['id'] = fila_sql.id
		diccionario['nombre'] = fila_sql.nombre
		diccionario['imagen'] = fila_sql.url_imagen
		diccionario['ano_creacion'] = fila_sql.ano_creacion
		diccionario['genero'] = fila_sql.genero
		respuesta_final.append(diccionario)
	return JsonResponse(respuesta_final, safe=False)

"""Lo mismo que la función anterior, pero con un filtro en el campo id, es decir, nos mostrará
sólo la id que nosotros le indiquemos en la URL"""
def devolver_cancion_por_id(request, id_solicitado):
	juego = Tjuegos.objects.get(id = id_solicitado)
	comentarios = juego.tcomentarios_set.all()
	lista_comentarios = []
	for fila_comentario_sql in comentarios:
		diccionario = {}
		diccionario['id'] = fila_comentario_sql.id
		diccionario['comentario'] = fila_comentario_sql.comentario
		lista_comentarios.append(diccionario)
	resultado = {
		'id': juego.id,
		'nombre': juego.nombre,
		'fecha': juego.ano_creacion,
		'comentarios': lista_comentarios
	}
	return JsonResponse(resultado, json_dumps_params={'ensure_ascii': False})


"""Esta función nos permitirá ver si los comentarios están bien realizados desde la terminal de Windows"""
@csrf_exempt
def guardar_comentario(request, juego_id):
	if request.method != 'POST':
		return None
	json_peticion = json.loads(request.body)
	comentario = Tcomentarios()
	comentario.comentario = json_peticion['nuevo_comentario']
	comentario.juego = Tjuegos.objects.get(id = juego_id)
	comentario.save()
	return JsonResponse({"status": "ok"})
