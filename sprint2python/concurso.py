from factorial import func_factorial
print("Concurso!!")
print("Se le realizaran 3 preguntas que cada una correcta suma 10 puntos y cada erronea resta 5.")
print("Al finalizar las 3 se le mostrará el resultado final.")

print("Primera pregunta...")
print("¿Cúal es el jugador con más balones de oro de la historia?")
print("A) Messi.")
print("B) Quiles.")
print ("C) Danilo Pereira.")
respuesta=input().upper()
puntuation = 0
if respuesta == "B":
   puntuation= puntuation+10
else:
    puntuation= puntuation-5

print("Segunda pregunta...")
print("¿Cúal es el mejor día del mes?")
print("A) El 18.")
print("B) El 23.")
print ("C) El 30.")
respuesta=input().upper()
if respuesta == "A":
   puntuation= puntuation+10
else:
    puntuation= puntuation-5

print("Tercera pregunta...")
print("¿Cúal es el mejor día de entre semana?")
print("A) Lunes.")
print("B) Miercoles.")
print ("C) Jueves.")
respuesta=input().upper()
if respuesta == "C":
   puntuation= puntuation +10
else:
    puntuation= puntuation-5
print("Puntuación total:")
print("Su puntuación total es de...")
print(puntuation)
 
