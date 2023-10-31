import random
from random import sample

adivinanza1 = "Adivina adivinanza, ¿Qué le dice un semáforo a otro que le está mirando?"
adivinanza2 = 'Si las dejas se pasan, pero para venderlas las pesas'
adivinanza3 = "¿Qué juguete es el más egoísta?"

adivinanzas = [adivinanza1, adivinanza2, adivinanza3]

resultados = {
'a1': "a: Verde que te quiero verde",
'b1': "b: No me mires que me sonrojo",
'c1': "c: Amarillo como los chinos",
'a2':'a: un coche',
'b2':'b: la leche',
'c2':'c: las uvas',
'a3':'a: peluche',
'b3':'b: yo-yo',
'c3':'c: coche',
'op1':'a',
'op2':'b',
'op3':'c'
}

print()
print()

adivinanza_aleatoria = (random.sample(adivinanzas, 2))

puntuacion = 0  
i = 0
while i < 2:
    if adivinanza_aleatoria[i] == adivinanza1:
        print(adivinanza_aleatoria[i])
        print(resultados['a1'])
        print(resultados['b1'])
        print(resultados['c1'])
        respuesta = input("Introduzca una opción (a,b,c): ")
        #while respuesta != 'a' and respuesta != 'b' and respuesta != 'c':
        if respuesta == resultados['op2']:
            print("Respuesta correcta")
            puntuacion = puntuacion + 10
        elif respuesta != resultados['op2']:
            print("Respuesta incorrecta")
            puntuacion = puntuacion + 5           
    elif adivinanza_aleatoria[i] == adivinanza2:
        print(adivinanza_aleatoria[i])
        print(resultados['a2'])
        print(resultados['b2'])
        print(resultados['c2'])
        respuesta = input("Introduzca una opción (a,b,c): ")
        #while respuesta != 'a' and respuesta != 'b' and respuesta != 'c':
        if respuesta == resultados['op3']:
            print("Respuesta correcta")
            puntuacion = puntuacion + 10
        elif respuesta != resultados['op3']:
            print("Respuesta incorrecta")
            puntuacion = puntuacion + 5
    elif adivinanza_aleatoria[i] == adivinanza2:
        print(adivinanza_aleatoria[i])
        print(resultados['a2'])
        print(resultados['b2'])
        print(resultados['c2'])
        respuesta = input("Introduzca una opción (a,b,c): ")
        #while respuesta != 'a' and respuesta != 'b' and respuesta != 'c':
        if respuesta == resultados['op3']:
            print("Respuesta correcta")
            puntuacion = puntuacion + 10
        elif respuesta != resultados['op3']:
            print("Respuesta incorrecta")
            puntuacion = puntuacion + 5
    elif adivinanza_aleatoria[i] == adivinanza3:
        print(adivinanza_aleatoria[i])
        print(resultados['a3'])
        print(resultados['b3'])
        print(resultados['c3'])
        respuesta = input("Introduzca una opción (a,b,c): ")
        #while respuesta != 'a' and respuesta != 'b' and respuesta != 'c':
        if respuesta == resultados['op2']:
            print("Respuesta correcta")
            puntuacion = puntuacion + 10
        elif respuesta != resultados['op2']:
            print("Respuesta incorrecta")
            puntuacion = puntuacion + 5
    elif adivinanza_aleatoria[i] == adivinanza3:
        print(adivinanza_aleatoria[i])
        print(resultados['a3'])
        print(resultados['b3'])
        print(resultados['c3'])
        respuesta = input("Introduzca una opción (a,b,c): ")
        #while respuesta != 'a' and respuesta != 'b' and respuesta != 'c':
        if respuesta == resultados['op2']:
            print("Respuesta correcta")
            puntuacion = puntuacion + 10
        elif respuesta != resultados['op2']:
            print("Respuesta incorrecta")
            puntuacion = puntuacion + 5
    i += 1
    
print("Puntuación final: ",puntuacion)
            
            
            