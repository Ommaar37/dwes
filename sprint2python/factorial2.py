def func_factorial():
    return fact
num = int(input("Introduce un número:"))
fact = 1
for i in range(1 , num +1):
    fact = fact * i
print ("El factorial de %d es : %d"%(num, fact))

