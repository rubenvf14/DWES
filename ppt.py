import random
contadorAliado = 0
contadorEnemigo = 0

i = 0
while i < 5:
    i += 1
    print()
    print("BIENVENIDO AL JUEGO DE PIEDRA PAPEL TIJERA")
    print()
    print("POSIBLES JUGADAS")
    print("================")
    print("1.- pedra")
    print("2.- papel")
    print("3.- tixeiras")
    print()
    jugada = input("Seleccione una jugada de entre las siguientes: pedra, papel, tixeiras: ")

    jugadas_array = ["pedra", "papel", "tixeiras"]

    aleatorio = random.choice(jugadas_array)

    if jugada == aleatorio:
        print()
        print("Has empatado. Esta ronda no se contará")
    elif jugada == 'pedra' and aleatorio == 'papel':
        print()
        print("Has perdido, papel gana a pedra")
        contadorEnemigo += 1
    elif jugada == 'papel' and aleatorio == 'pedra':
        print()
        print("Has ganado, papel gana a pedra")
        contadorAliado += 1
    elif jugada == 'pedra' and aleatorio == 'tixeiras':
        print()
        print("Has ganado, pedra gana a tixeiras")
        contadorAliado += 1
    elif jugada == 'tixeiras' and aleatorio == 'pedra':
        print()
        print("Has perdido, pedra gana a tixeiras")
        contadorEnemigo += 1
    elif jugada == 'papel' and aleatorio == 'tixeiras':
        print()
        print("Has perdido, tixeiras gana a papel")
        contadorEnemigo += 1
    elif jugada == 'tixeiras' and aleatorio == 'papel':
        print()
        print("Has ganado, tixeiras gana a papel")
        contadorAliado += 1



if contadorAliado > contadorEnemigo:
    print("Has ganado el mejor de cinco. ¡Enhorabuena!")
elif contadorEnemigo > contadorAliado:
    print("Eres un puto tonto")
elif contadorEnemigo > contadorAliado:
    print("Habéis empatado el mejor de cinco")