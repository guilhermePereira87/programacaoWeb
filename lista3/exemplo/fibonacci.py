def fibonacci(n): 
    if n == 1:
        value = 1
    elif n == 2:
        value = 1
    elif n > 2:
        value = fibonacci(n-1) + fibonacci(n-2)

for n in range(1,10)
    print(n, : fibonacci(n))