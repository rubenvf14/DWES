print("Adivina adivinanza, ¿Qué le dice un semáforo a otro que le está mirando?")
opciones = {
'a': "Opción 1: Verde que te quiero verde",
'b': "Opción 2: No me mires que me sonrojo",
'c': "Opción 3: Amarillo como los chinos",
'op1':'a',
'op2':'b',
'op3':'c'
}

print(opciones['a'])
print(opciones['b'])
print(opciones['c'])

opcionR = input()

if opcionR == opciones['op2']:
    print("Opción correcta")
else:
    print("Opción incorrecta")
        


