print("Adivina adivinanza, ¿Qué le dice un semáforo a otro que le está mirando?")
puntuacion = 0
opciones = {
'a1': "a: Verde que te quiero verde",
'b1': "b: No me mires que me sonrojo",
'c1': "c: Amarillo como los chinos",
'op1':'a',
'op2':'b',
'op3':'c',
'a2':'a: un coche',
'b2':'b: la leche',
'c2':'c: las uvas',
'a3':'a: peluche',
'b3':'b: yo-yo',
'c3':'c: coche'
}

print(opciones['a1'])
print(opciones['b1'])
print(opciones['c1'])

opcionR = input()

if opcionR == opciones['op2']:
    print("Opción correcta")
    puntuacion = puntuacion + 10
else:
    print("Opción incorrecta")
    puntuacion = puntuacion + 5
        
print('Si las dejas se pasan, pero para venderlas las pesas')

print(opciones['a2'])
print(opciones['b2'])
print(opciones['c2'])

opcionR = input()

if opcionR == opciones['op3']:
    print("Opción correcta")
    puntuacion = puntuacion + 10
else:
    print("Opción incorrecta")
    puntuacion = puntuacion + 5

print("¿Qué juguete es el más egoísta?")

print(opciones['a3'])
print(opciones['b3'])
print(opciones['c3'])

opcionR = input()

if opcionR == opciones['op2']:
    print("Opción correcta")
    puntuacion = puntuacion + 10
else:
    print("Opción incorrecta")
    puntuacion = puntuacion + 5

print("Puntuación: ",puntuacion)