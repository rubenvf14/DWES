print("¡Bienvenido a su calculadora!")
print()
print("==MENU==")
print("1.- Suma")
print("2.- Resta")
print("3.- Multiplicación")
print("4.- División")
print()

openR = int(input("Introduzca una opción: "))

num1 = int(input("Introduzca el primer operando: "))
num2 = int(input("Introduzca el segundo operando: "))

def suma (num1, num2):
    sumando = num1+num2
    print(f"La suma de {num1} y {num2} es: {sumando}")
    return sumando

def resta (num1, num2):
    restando = num1-num2
    print(f"La resta de {num1} y {num2} es: {restando}")
    return restando

def multiplicacion (num1, num2):
    multiplicando = num1*num2
    print(f"La multiplicación de {num1} y {num2} es: {multiplicando}")
    return multiplicando

try:
    def division (num1, num2):
        print(f"La división de {num1} y {num2} es: {num1/num2}")
        return num1/num2 
except ZeroDivisionError:
    print("Error: no se puede dividir por 0")



if openR == 1:
    suma(num1,num2)
elif openR == 2:
    resta(num1,num2)
elif openR == 3:
    multiplicacion(num1,num2)
elif openR == 4:
    division(num1,num2)
        
