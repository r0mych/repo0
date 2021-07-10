def fibonacci(n):
    if n in (1, 2):
        return 1
    return fibonacci(n - 1) + fibonacci(n - 2)
def isinteger(n):
    try:
        int(n)
        return True
    except ValueError:
        return False
print("введите целое число:")
chislo = input()
if isinteger(chislo) == True:
    print(fibonacci(int(chislo)))
else:
    print("введено не целое число")
