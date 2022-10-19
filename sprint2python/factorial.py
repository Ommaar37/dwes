def func_factorial():
    numero = int(print("Introduce un número para realizar un factorial de forma recursiva."))
    if numero <= 1:
        return 1
    else:
        return numero*func_factorial(numero-1)
