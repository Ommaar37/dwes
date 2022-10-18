print("Concurso!!")
print("¿Cúal es el jugador con más balones de oro de la historia?")
print("A) Messi.")
print("B) Quiles.")
print ("C) Danilo Pereira.")
respuesta=input().upper()
if respuesta != "B" and respuesta != "A" and respuesta != "C":
    print("Respuesta fuera de rango, concurso perdido.")
elif respuesta == "B":
    print("¡CORRECTO!")
else:
    print("Respuesta incorrecta.")

