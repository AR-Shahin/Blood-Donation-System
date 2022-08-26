
import math
def isPerfectSquare(num):
    temp = math.sqrt(num)
    return True if num % temp == 0 else False

print(isPerfectSquare(160))
