from random import randint
def respuesta():
    r = input("¿Cúal es tu respuesta?")
    re = r.upper()
    while (re != 'A' and re != 'B' and re != 'C'):
        print("Solamente se aceptan como respuesta 'A', 'B' o 'C'. Inténtelo de nuevo.")
        print ("")
        r = input("¿Cúal es tu respuesta?")
        re = r.upper()
    return re
puntuacion = 0
pregunta_no_elegida = randint(1,3)
print ("")
print ("********** CONCURSO **********")
print ("")
if (pregunta_no_elegida != 1):
    print ("-------------------------------------------------------------------------------------------")
    print ("PRIMERA PREGUNTA")
    print ("¿Cual es el jugador con más balones de oro?")
    print ("-------------------------------------------------------------------------------------------")
    print ("")

    print ("Respuestas posibles: ")
    print ("A) Messi.")
    print ("B) Quiles.")
    print ("C) Danilo Pereira.")
    print ("")

    r = respuesta()

    print ("")
    if r == 'B':
        print("Respuesta correcta, +10 puntos.")
        puntuacion += 10
    else:
        print ("Respuesta fallida, -5 puntos.")
        puntuacion -=5
if (pregunta_no_elegida != 2):
    print ("-------------------------------------------------------------------------------------------")
    print ("SEGUNDA PREGUNTA")
    print ("¿Cual es el mejor día del mes?")
    print ("-------------------------------------------------------------------------------------------")
    print ("")

    print ("Respuestas posibles: ")
    print ("A) 12.")
    print ("B) 28.")
    print ("C) 14.")
    print ("")

    r = respuesta()

    print ("")
    if r == 'A':
        print("Respuesta correcta, +10 puntos.")
        puntuacion += 10
    else:
        print ("Respuesta fallida, -5 puntos.")
        puntuacion -=5
if (pregunta_no_elegida != 3):
    print ("-------------------------------------------------------------------------------------------")
    print ("TERCERA PREGUNTA")
    print ("¿Cual es el mejor día de entre semana?")
    print ("-------------------------------------------------------------------------------------------")
    print ("")

    print ("Respuestas posibles: ")
    print ("A) Lunes.")
    print ("B) Miercoles.")
    print ("C) Viernes.")
    print ("")

    r = respuesta()

    print ("")
    if r == 'A':
        print("Respuesta correcta, +10 puntos.")
        puntuacion += 10
    else:
        print ("Respuesta fallida, -5 puntos.")
        puntuacion -=5
print ("")
print ("El resultado final es de " + str(puntuacion))
