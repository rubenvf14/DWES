from operaciones import suma, resta, multiplicacion, division

otro = input("¿Desea realizar otra operación? (s/n): ")
while otro != 'n':
    print()
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
    
    otro = input("¿Desea realizar otra operación? (s/n): ")

    if openR == 1:
     suma(num1,num2)
    elif openR == 2:
      resta(num1,num2)
    elif openR == 3:
     multiplicacion(num1,num2)
    elif openR == 4:
      division(num1,num2)    

