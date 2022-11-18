function createPageBtn(page, classes=[]) {
    let btn = document.createElement('button');
    classes.push('btn');
    for (cls of classes) {
        btn.classList.add(cls);
    }
    btn.dataset.page = page;
    btn.innerHTML = page;
    return btn;
}

function renderPaginationElement(info) {
    let btn;
    let paginationContainer = document.querySelector('.pagination');
    paginationContainer.innerHTML = '';

    btn = createPageBtn(1, ['first-page-btn']);
    btn.innerHTML = 'Первая страница';
    if (info.current_page == 1) {
        btn.style.visibility = 'hidden';
    }
    paginationContainer.append(btn);

    let buttonsContainer = document.createElement('div');
    buttonsContainer.classList.add('pages-btns');
    paginationContainer.append(buttonsContainer);

    let start = Math.max(info.current_page - 2, 1);
    let end = Math.min(info.current_page + 2, info.total_pages);
    for (let i = start; i <= end; i++) {
        buttonsContainer.append(createPageBtn(i, i == info.current_page ? ['active'] : []));
    }

    btn = createPageBtn(info.total_pages, ['last-page-btn']);
    btn.innerHTML = 'Последняя страница';
    if (info.current_page == info.total_pages) {
        btn.style.visibility = 'hidden';
    }
    paginationContainer.append(btn);
}

function perPageBtnHandler(event) {
    downloadData(1);
}

function setPaginationInfo(info) {
    document.querySelector('.total-count').innerHTML = info.total_count;
    let start = info.total_count > 0 ? (info.current_page - 1)*info.per_page + 1 : 0;
    document.querySelector('.current-interval-start').innerHTML = start;
    let end = Math.min(info.total_count, start + info.per_page - 1)
    document.querySelector('.current-interval-end').innerHTML = end;
}

function pageBtnHandler(event) {
    if (event.target.dataset.page) {
        downloadData(event.target.dataset.page);
        window.scrollTo(0, 0);
    }
}

function createAuthorElement(record) {
    let user = record.user || {'name': {'first': '', 'last': ''}};
    let authorElement = document.createElement('div');
    authorElement.classList.add('author-name');
    authorElement.innerHTML = user.name.first + ' ' + user.name.last;
    return authorElement;
}

function createUpvotesElement(record) {
    let upvotesElement = document.createElement('div');
    upvotesElement.classList.add('upvotes');
    upvotesElement.innerHTML = record.upvotes;
    return upvotesElement;
}

function createFooterElement(record) {
    let footerElement = document.createElement('div');
    footerElement.classList.add('item-footer');
    footerElement.append(createAuthorElement(record));
    footerElement.append(createUpvotesElement(record));
    return footerElement;
}

function createContentElement(record) {
    let contentElement = document.createElement('div');
    contentElement.classList.add('item-content');
    contentElement.innerHTML = record.text;
    return contentElement;
}

function createListItemElement(record) {
    let itemElement = document.createElement('div');
    itemElement.classList.add('facts-list-item');
    itemElement.append(createContentElement(record));
    itemElement.append(createFooterElement(record));
    return itemElement;
}


function renderRecords(records) {
    let factsList = document.querySelector('.facts-list');
    factsList.innerHTML = '';
    for (let i = 0; i < records.length; i++) {
        factsList.append(createListItemElement(records[i]));
    }
}

//загрузка необходимого количества записей
function downloadData(page=1) {
    let factsList = document.querySelector('.facts-list');
    let url = new URL(factsList.dataset.url);
    let perPage = document.querySelector('.per-page-btn').value;
    url.searchParams.append('page', page);
    url.searchParams.append('per-page', perPage);
    let xhr = new XMLHttpRequest();
    xhr.open('GET', url);
    xhr.responseType = 'json';
    xhr.onload = function () {
        renderRecords(this.response.records);
        setPaginationInfo(this.response['_pagination']);
        renderPaginationElement(this.response['_pagination']);
    }
    xhr.send();
}


//input_f - принимаем текст, который ввел пользователь
//search_f - делаем из строки регулярное выражение
//pr_f - сохраняем в нее текущий <body></body>
//result_f - выборка текста из pr (т.е. отсекаем теги и атрибуты)
//result_arr_f - аналог pr, но со стилями для подсветки
//locale_HTML_f - оригинал <body></body> который менять не будем, используем для обнуления стилей
/*
let input_f,search_f,pr_f,result_f,result_arr_f, locale_HTML_f, result_store_f;
locale_HTML_f = document.body.innerHTML;   // сохраняем в переменную весь body (Исходный)
function FindOnPage(name, status) {
	input_f = document.getElementById(name).value; //получаем значение из поля в html
    input_f = numer.replace(/^\s+/g,'');
    input_f = numer.replace(/[ ]{1,}/g,' ');
	if(input_f.length<3 && status==true) {
		alert('Для поиска вы должны ввести три или более символов');
		function FindOnPageBack() { 
            document.body.innerHTML = locale_HTML_f; //обнуляем стили
        }   
	}
    if(input_f.length>=3) {
        //выполняем поиск
        function FindOnPageGo() {
            search_f = '/'+input_f+'/g';  //делаем из строки регуярное выражение
            pr_f = document.body.innerHTML;   // сохраняем в переменную весь body
            result_f = pr_f.match(/>(.*?)</g);  //отсекаем все теги и получаем только текст
            result_arr_f = [];   //в этом массиве будем хранить результат работы (подсветку)
            let warning = true;
	        for(var i=0;i<result_f.length;i++) {
	            if(result_f[i].match(eval(search_f))!=null) {
			        warning = false;
		        }
	        }
            if(warning == true) {
                alert('Не найдено ни одного совпадения');
            }
            for(var i=0; i<result_f.length;i++) {
		        result_arr_f[i] = result_f[i].replace(eval(search_f), '<span style="background-color:yellow;">'+input_f+'</span>'); //находим нужные элементы, задаем стиль и сохраняем в новый массив
			}
		     for(var i=0; i<result_f.length;i++) {
			pr_f=pr_f.replace(result_f[i],result_arr_f[i])  //заменяем в переменной с html текст на новый из новогом ассива
			}
		     document.body.innerHTML = pr_f;  //заменяем html код
        }
        
    }
    function FindOnPageBack() { 
        document.body.innerHTML = locale_HTML_f; //обнуляем стили
    }   
    if(status) { 
        FindOnPageBack(); FindOnPageGo(); //чистим прошлое и Выделяем найденное
    } 
	if(!status) { 
        FindOnPageBack(); //Снимаем выделение
    } 
}
*/

/*
let input_f, locale_HTML_f;
locale_HTML_f = document.body.innerHTML;
function search_on_page(name, status) {
    
    
    input_f = document.getElementById(name).value; //получаем значение из поля в html
    input_f = numer.replace(/^\s+/g,'');
    input_f = numer.replace(/[ ]{1,}/g,' ');

	if(input_f.length<3 && status==true) {
		alert('Для поиска вы должны ввести три или более символов');
		function FindOnPageBack() { 
            document.body.innerHTML = locale_HTML_f; //обнуляем стили
        }   
	}

    if(input_f.length>=3) {
        //выполняем поиск
        function FindOnPageGo() {
            search_f = '/'+input_f+'/g';  //делаем из строки регуярное выражение
            pr_f = document.body.innerHTML;   // сохраняем в переменную весь body
            result_f = pr_f.match(/>(.*?)</g);  //отсекаем все теги и получаем только текст
            result_arr_f = [];   //в этом массиве будем хранить результат работы (подсветку)
            let warning = true;
	        for(var i=0;i<result_f.length;i++) {
	            if(result_f[i].match(eval(search_f))!=null) {
			        warning = false;
		        }
	        }
            if(warning == true) {
                alert('Не найдено ни одного совпадения');
            }
            for(var i=0; i<result_f.length;i++) {
		        result_arr_f[i] = result_f[i].replace(eval(search_f), '<span style="background-color:yellow;">'+input_f+'</span>'); //находим нужные элементы, задаем стиль и сохраняем в новый массив
			}
		     for(var i=0; i<result_f.length;i++) {
			pr_f=pr_f.replace(result_f[i],result_arr_f[i])  //заменяем в переменной с html текст на новый из новогом ассива
			}
		     document.body.innerHTML = pr_f;  //заменяем html код
        }
    }
    function FindOnPageBack() { 
        document.body.innerHTML = locale_HTML_f; //обнуляем стили
    }   
    if(status) { 
        FindOnPageBack(); FindOnPageGo(); //чистим прошлое и Выделяем найденное
    } 
	if(!status) { 
        FindOnPageBack(); //Снимаем выделение
    }  
}*/

function search_on_page(page) {
    let factsList = document.querySelector('.facts-list');
    let url = new URL(factsList.dataset.url);
    //let perPage = document.querySelector('.per-page-btn').value;
    url.searchParams.append('q', 'cat');
    //url.searchParams.append('per-page', perPage);
    let xhr = new XMLHttpRequest();
    xhr.open('GET', url);
    xhr.responseType = 'json';
}
function FindOnPageGo(event) {
    if (event.target.dataset.page) {
        downloadData(event.target.dataset.page);
        window.scrollTo(0, 0);
    }

}







window.onload = function () {

    downloadData();
    document.querySelector('.pagination').onclick = pageBtnHandler;
    document.querySelector('.per-page-btn').onchange = perPageBtnHandler;
    //document.querySelector('.search-btn').onclick = FindOnPage;
    document.querySelector('.search-btn').onclick = FindOnPageGo;
    
    
}



