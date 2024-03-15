<?php
import random

# Генерируем случайное число
num = random.randint(2, 100)

while num <= 1 or any(num % i == 0 for i in range(2, int(num ** 0.5) + 1)):
    num = random.randint(2, 100)

print(f"Случайное число {num} является простым и больше 1.")
?>