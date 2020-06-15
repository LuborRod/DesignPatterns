Аналогия


Вы пришли в ресторан. Вы (Client) просите официанта (Invoker) принести блюда (Command). Официант перенаправляет запрос шеф-повару (Receiver), который знает, что и как готовить. Другой пример: вы (Client) включаете (Command) телевизор (Receiver) с помощью пульта (Invoker).


Вкратце


Шаблон «Команда» позволяет инкапсулировать действия в объекты. Ключевая идея — предоставить средства отделения клиента от получателя.


Википедия


В шаблоне «Команда» объект используется для инкапсуляции всей информации, необходимой для выполнения действия либо для его инициирования позднее. Информация включает в себя имя метода; объект, владеющий методом; значения параметров метода.
Пример


Сначала сделаем получателя, содержащего реализации каждого действия, которое может быть выполнено.