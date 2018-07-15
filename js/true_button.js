
(function() {
	tinymce.PluginManager.add('true_mce_button', function( editor, url ) { // true_mce_button - ID кнопки
		editor.addButton('true_mce_button', {  // true_mce_button - ID кнопки, везде должен быть одинаковым
			text: '[films]', // текст кнопки, если вы хотите, чтобы ваша кнопка содержала только иконку, удалите эту строку
			title: 'Вставить шорткод [films]', // всплывающая подсказка
			icon: false, // тут можно указать любую из существующих векторных иконок в TinyMCE либо собственный CSS-класс
			onclick: function() {
				editor.insertContent('[films]'); // вставляем шорткод [films] в редактор, также можно задать любое действие jQuery
			}
		});
	});
})();


/*
(function() {
	tinymce.PluginManager.add('true_mce_button', function( editor, url ) { // id кнопки true_mce_button должен быть везде один и тот же
		editor.addButton( 'true_mce_button', { // id кнопки true_mce_button
			icon: 'perec', // мой собственный CSS класс, благодаря которому я задам иконку кнопки
			type: 'menubutton',
			title: 'Вставить элемент', // всплывающая подсказка при наведении
			menu: [ // тут начинается первый выпадающий список
				{
					text: 'Элементы форм',
					menu: [ // тут начинается второй выпадающий список внутри первого
						{
							text: 'Текстовое поле',
							onclick: function() {
								editor.windowManager.open( {
									title: 'Задайте параметры поля',
									body: [
										{
											type: 'textbox', // тип textbox = текстовое поле
											name: 'textboxName', // ID, будет использоваться ниже
											label: 'ID и name текстового поля', // лейбл
											value: 'comment' // значение по умолчанию
										},
										{
											type: 'textbox', // тип textbox = текстовое поле
											name: 'multilineName',
											label: 'Значение текстового поля по умолчанию',
											value: 'Привет',
											multiline: true, // большое текстовое поле - textarea
											minWidth: 300, // минимальная ширина в пикселях
											minHeight: 100 // минимальная высота в пикселях
										},
										{
											type: 'listbox', // тип listbox = выпадающий список select
											name: 'listboxName',
											label: 'Заполнение',
											'values': [ // значения выпадающего списка
												{text: 'Обязательное', value: '1'}, // лейбл, значение
												{text: 'Необязательное', value: '2'}
											]
										}
									],
									onsubmit: function( e ) { // это будет происходить после заполнения полей и нажатии кнопки отправки
										editor.insertContent( '[textarea id="' + e.data.textboxName + '" value="' + e.data.multilineName + '" required="' + e.data.listboxName + '"]');
									}
								});
							}
						},
						{ // второй элемент вложенного выпадающего списка, прост вставляет шорткод [button]
							text: 'Кнопка отправки',
							onclick: function() {
								editor.insertContent('[button]');
							}
						}
					]
				},
				{ // второй элемент первого выпадающего списка, просто вставляет [films]
					text: 'Шорткод [films]',
					onclick: function() {
						editor.insertContent('[films]');
					}
				}
			]
		});
	});
})();
*/
