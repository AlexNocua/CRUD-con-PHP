# escribir mano a mano cada una de las partes del proyecto. anotacoes

# entrar no sistema da empresa e fazer o cadastro automatico da empresa e fazer um cadastro automatico.
# aprender o que sao os automaticacoes do sistema

# 1--entrar no sistema da empresa

# 2--fazer o login na pagina

# 3-- importar o banco de datos

# 4-- cadastrar cadda umo dos dados

# 5-- Repetir isso ate finalizar o cadastro de tudos os dados.


# automatizar maus tela e teclado

# instalacion de tres librerias al mismo tiempo pip install pandas numpy openpyxl
import pandas
import pyautogui
import time

pyautogui.PAUSE = 1  # este tiene mas comandos esperar un segundo para cada una de las acciones, esto tambien con el fin de que se ejecute todo sin problemas

pyautogui.press("win")  # pulsar la tecla de windows.
pyautogui.write("brave")
pyautogui.press("enter")  # \" eso es para identificar el texto


# crear variables para links o otras acciones que generen problemas
link = "http://localhost/PROYECTOS-PHP/crud_php/index.php"

pyautogui.write(link)


time.sleep(2)  # diferencia de 5 segundos en este lugar especifico
pyautogui.press("enter")

time.sleep(2)
# poblemas con problemas de resolucion este tiene mas configuraciones segun las necesidades



# abrir cada tipo de archivo tiene que estar en la misma pagina de nuestro codigo
tabela = pandas.read_excel("personas.xlsx")
print(tabela)  # muestra por consola en la base sde datos

for linha in tabela.index:  # en cada linia de mi tabla hacer -- index para saber el tamaño de la tabla para cada item dentro de un conjunto de items

    # index linhas colums colums
    pyautogui.press("tab")
    #
    # para cada uno de estos pasos se tiene qyue escribirl el nombre de la columna recipera el valor que esta en la linha tal con la columna codigo
    nombre = tabela.loc[linha, "nombre "]
    pyautogui.write(nombre)
    #
    pyautogui.press("tab")
    # para cada uno de estos pasos se tiene qyue escribirl el nombre de la columna recipera el valor que esta en la linha tal con la columna codigo
    apellido = tabela.loc[linha, "apellido"]
    pyautogui.write(apellido)
    #
   
    #
    pyautogui.press("tab")
    # para cada uno de estos pasos se tiene qyue escribirl el nombre de la columna recipera el valor que esta en la linha tal con la columna codigo
    cc = (tabela.loc[linha, "cc"])
    # concatenacion de valores enteros a string
    pyautogui.write(str(cc))

    #
    pyautogui.press("tab")
    # para cada uno de estos pasos se tiene qyue escribirl el nombre de la columna recipera el valor que esta en la linha tal con la columna codigo
    fecha_nacimiento = tabela.loc[linha, "fecha_nacimiento"]
    pyautogui.write(str(fecha_nacimiento))

    #
    pyautogui.PAUSE = 1
    pyautogui.press("tab")
    # para cada uno de estos pasos se tiene qyue escribirl el nombre de la columna recipera el valor que esta en la linha tal con la columna codigo
    correo = (tabela.loc[linha, "correo"])
    pyautogui.write(correo)

    #

    #
    pyautogui.press("tab")
    pyautogui.press("enter")
    pyautogui.PAUSE = 1
    # numeros positivos para encuima ty negativos para abajo

    # enviar el producto
