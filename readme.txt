=== VKontakte API ===
Contributors: kowack
Donate link: http://www.kowack.info/projects/vk_api/
Tags: vkontakte, facebook, crosspost, comments, social, share, vk.com
Requires at least: 3.5.1
Tested up to: 3.8.1
Stable tag: 3.18

Добавляет функционал API сайта VKontakte.ru(vk.com) на ваш блог. Комментарии, кнопки, виджеты...

== Description ==

* Реализовано комментирование: ВКонтакте, FaceBook.
* А так же оповещение на почту о новых комментариях автору записи.
* А так же кросспостинг в группу ВК с изображениями.
* А так же кнопка "Мне нравится" от ВК.
* А так же кнопка "Сохранить" от ВК.
* А так же кнопка "Мне нравится" от FB.
* А так же кнопка "+1" от Google.
* А так же виджет "Сообщества" от ВК и FB.
* А так же виджет "Популярного" по статистике кнопки "Мне нравится" от ВК.
* А так же виджет "Последние комментарии" от ВК.
* А так же виджет "Вход\регистрация" от ВК.
* А так же вход\регистрация и привязка аккаунта ВКонтакте.
* А так же облако тегов на HTML5 ( многие плагины облака тегов не поддерживают версию WordPress-a > 3 ).
* Для переводчиков: поддерживает перевод.

== Installation ==

1. Upload `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= Настройка плагина =

Для подключения каких-либо функций к сайту у Вас должен быть **ID приложения**, для кросспостинга — **Защищенный ключ**.
Если они у Вас уже есть — укажите их в настройках плагина.
Если нет — перейдите по этой ссылке [http://vk.com/editapp?act=create&site=1](http://vk.com/editapp?act=create&site=1)
и подключите ваш сайт(тип приложения должен быть **Веб-сайт**).

= Плагин бесплатный ? =

Да, плагин абсолютно бесплатен, без какой либо рекламы. На веки вечные.


== Screenshots ==

1. Настройки ВКонтакте.
2. Настройки Facebook.
3. Настройки социальных кнопок.
4. Остальные настройки.

== Changelog ==

= 3.10 =
Улучшения и отображение каптчи.

= 3.9 =
Небольшое улучшение.

= 3.8 =
Актуализация под новые версии ВКонтакте и Wordpress.
Теперь уведомления присылаются не только админу сайта, но и автору записи.
Теперь не кросспостятся записи из bbPress.

= 3.7 =
Починен счетчик комментариев.

= 3.6 =
Всякие улучшения и исправления появившихся багов.

= 3.5 =
Больше опций.
Улучшения.

= 3.4 =
Исправления.

= 3.3 =
Исправления.
Поддержка всех типов постов.

= 3.2 =
Убраны старые баги, добавлены новые.
Вывод ошибок кросспостинга, если он не сработал.

= 3.0 =
Мажорное обновление.
Троеточие в конце статьи.
Теперь можно указывать именную ID группы.
Вместо картинки поста берётся миниатюра, если такова присутствует.
Все скрипты асинхронны.
Соц.кнопки теперь "inline-block" вместо "float".
Опция "Первыми показывать комментарии Facebook-а".
При кросспостинге добавляется заголовок статьи.
(Beta) Запланированные записи (их кросспост и опция)
(Beta) Декодировать кириллические ссылки при кросспосте.

= 2.7 =
Улучшения + мелкие исправления.

= 2.6 =
Улучшения.

= 2.5 =
* больше настроек кросспостинга;
* фикс счётчика комментариев;
* изменение запроса прав на "Access Token".

= 2.4 =
Remove debug code

= 2.3 =
Better.

= 2.2 =
Кросспостинг с изображениями.

= 2.1 =
Подгонка плагина под WP 3.4 и тест кросспостинга.

= 2.0 =
* Комментарии от FB.
* Виджет "Сообщества" FB.
* Социальные кнопки: Mail.ru, Одноклассники, Twitter, Яндекс.

= 1.27 =
* Исправление вывода шорткодов.
* Мелкие улучшения.
* Добавлена кнопка "Мне нравится" от Facebook.
* Добавлена кнопка "+1" от Google.
* Добавлен шорткод [vk_like] ( [vk_like id="123456"], где 123456 - уникальный айдишник кнопки ).

= 1.24 - 1.26 =
* Исправление исправлений. А также:
* У тех у кого работает вход - исправление роли нового пользователя.
* Опция ширины виджета статистики.
* Опция кнопок на каждой страницы.
* Больше опций виджета тегов.
* Если у темы wp-login.php свой - нету кнопок.
* Ссылочки переписаны на VK.com.

= 1.23 =
* Переконвертировал всё в Win-формат.

= 1.22 =
* Fix.

= 1.21 =
* Облако тегов ( многие плагины тегов не поддерживают версию WordPress-a 3.3 ).

= 1.20 =
* Исправление отображения в некоторых темах.

= 1.19 =
* Исправление ограничения ВКонтактом длины строки.

= 1.18 =
* Мелкое исправление редиректа при входе на сайт через ВК.
* Опцию включения/отключения входа через ВК.
* Так же по просьбам кнопка "Сохранить" ( Share ).
* Виджет "Последние комментарии ВКонтакте".

= 1.17 =
* Добавлена привязка аккаунта ВКонтакте.

= 1.16 =
* Очередное улучшение производительности.
* Виджет авторизации (бета-версия).

= 1.15 =
* style-fix

= 1.14 =
* mini-fix

= 1.13 =
* Вывод количества комментариев ВКонтакта.
* Отдельные настройки для каждой страницы.

= 1.12 =
* better

= 1.11 =
* better

= 1.10 =
* Added login\register widget. Can be enabled from options page.

= 1.9 =
* Fixed (if WP installed in sub directory)

= 1.8 =
* Admin mail-notification

= 1.7 =
* Add more options, hide wordpress comments if you wish

= 1.6 =
* Simple fix, better performance

= 1.5 =
* Fix "closed" commenting on page plus decorations.

= 1.4.1 =
* Translate fix.

= 1.4 =
* Fix something and add somethis options ^^.

= 1.3 =
* Add "I like" button.
* Add Widgets "Groups" and "More popular of 'I like' button statistics"

= 1.2 =
* Fix jQuery.

= 1.0 =
* Stable.

= 0.9 =
* "The plugin first time seeing this grey world. =)".

== Upgrade Notice ==

= 3.10 =
Улучшения и отображение каптчи.

= 3.9 =
Небольшое улучшение.

= 3.8 =
Актуализация под новые версии.

= 3.7 =
Починен счетчик комментариев.

= 3.6 =
Возможны баги. Был не в чистом сознании.

= 3.5 =
Улучшения.

= 3.4 =
Исправления.

= 3.3 =
Поддержка всех типов постов.
Исправления.

= 3.2 =
Вывод ошибок кросспостинга, если он не сработал.
Убраны старые баги, добавлены новые.

= 3.0 =
Переработана страница настроек.
При необходимости проверьте и обновите настройки.

= 2.7 =
Улучшения + мелкие исправления.

= 2.6 =
Улучшения.

= 2.5 =
Больше настроек кросспостинга, фикс счётчика комментариев, изменение запроса прав на "Access Token".

= 2.4 =
Убран отладочный код.

= 2.3 =
Решение проблем у тех у кого они были.

= 2.2 =
Кросспостинг с изображениями.

= 2.1 =
Подгонка плагина под WP 3.4 и тест кросспостинга.

= 2.0 =
Facebook, социальные кнопки: Mail.ru, Одноклассники, Twitter, Яндекс.

= 1.27 =
* Исправление вывода шорткодов.
* Мелкие улучшения.
* Добавлена кнопка "Мне нравится" от Facebook.
* Добавлена кнопка "+1" от Google.
* Добавлен шорткод [vk_like] ( [vk_like id="123456"], где 123456 - уникальный айдишник кнопки ).

= 1.24 - 1.26 =
* Исправление исправлений. А также:
* У тех у кого работает вход - исправление роли нового юзера.
* Опция ширины виджета статистики.
* Опция кнопок на каждой страницы.
* Больше опций виджета тегов.
* Если у темы wp-login.php свой - нету кнопок.
* Ссылочки переписаны на Vk.com.

= 1.23 =
* Переконвертировал всё в Win-формат.

= 1.22 =
* Fix.

= 1.21 =
* Облако тегов ( многие плагины тегов не поддерживают версию WordPress-a 3.3 ).

= 1.20 =
* Исправление отображения в некоторых темах.

= 1.19 =
* Исправление ограничения ВКонтактом длины строки.

= 1.18 =
* Мелкое исправление редиректа при входе на сайт через ВК.
* Опцию включения/отключения входа через ВК.
* Так же по просьбам кнопка "Сохранить" ( Share ).
* Виджет "Последние комментарии ВКонтакте".

= 1.17 =
* Добавлена привязка аккаунта ВКонтакте.

= 1.16 =
* Очередное улучшение производительности.
* Виджет авторизации (бета-версия).

= 1.15 =
* Вывод количества комментариев ВКонтакта.
* Отдельные настройки для каждой страницы.
* Микро-исправление.

= 1.14 =
* Вывод количества комментариев ВКонтакта.
* Отдельные настройки для каждой страницы.
* Микро-исправление.

= 1.13 =
* Вывод количества комментариев ВКонтакта.
* Отдельные настройки для каждой страницы.

= 1.12 =
* Делаем лучше

= 1.11 =
* Делаем лучше

= 1.10 =
* Добавлен виджет авторизации\регистрации. Включается в настройках плагина.

= 1.9 =
* Исправления (одно из них: если ВП установлен не в корневую директорию)

= 1.8 =
* Сообщения админу о новых комментариях. Продолжение следует =)

= 1.7 =
* Больше опций, скрытие комментариев Wordpress-a по желанию.

= 1.6 =
* Доработки

= 1.5 =
* Виджет комментариев не отображается если стоит запрет на комментирование в настройках страницы Wordpress.
* Плюшки =)

= 1.4.1 =
* Ошибочка перевода ^_^.

= 1.4 =
* Чу-чуть подправил и прибавил пару опций.

= 1.3 =
* Добавлена кнопка "Мне нравиться".
* Добавлены 2 виджета: первый показывает вашу группу ВКонтакте (название, участники, новости), второй - самое популярное исходя из статистики кнопки "Мне нравиться".

= 1.2 =
* Fix jQuery.

= 1.0 =
* Stable.

= 0.9 =
* First release.