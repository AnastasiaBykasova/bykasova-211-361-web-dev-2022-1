// Функция priority позволяет получить 
// значение приоритета для оператора.
// Возможные операторы: +, -, *, /.
//1
function priority(operation) {
    if (operation == '+' || operation == '-') {
        return 1;
    } else {
        return 2;
    }
}

// Проверка, является ли строка str числом.
//2.1
function isNumeric(str) {
    return /^\d+(.\d+){0,1}$/.test(str);
}

// Проверка, является ли строка str цифрой.
//2.2
function isDigit(str) {
    return /^\d{1}$/.test(str);
}

// Проверка, является ли строка str оператором.
//2.3
function isOperation(str) {
    return /^[\+\-\*\/]{1}$/.test(str);
}

// Функция tokenize принимает один аргумент -- строку
// с арифметическим выражением и делит его на токены 
// (числа, операторы, скобки). Возвращаемое значение --
// массив токенов.
//3
function tokenize(str) {
    let tokens = [];
    let lastNumber = '';
    for (char of str) {
        if (isDigit(char) || char == '.') {
            lastNumber += char;
        } else {
            if(lastNumber.length > 0) {
                tokens.push(lastNumber);
                lastNumber = '';
            }
        } 
        if (isOperation(char) || char == '(' || char == ')') {
            tokens.push(char);
        } 
    }
    if (lastNumber.length > 0) {
        tokens.push(lastNumber);
    }
    return tokens;
}

// Функция compile принимает один аргумент -- строку
// с арифметическим выражением, записанным в инфиксной 
// нотации, и преобразует это выражение в обратную 
// польскую нотацию (ОПН). Возвращаемое значение -- 
// результат преобразования в виде строки, в которой 
// операторы и операнды отделены друг от друга пробелами. 
// Выражение может включать действительные числа, операторы 
// +, -, *, /, а также скобки. Все операторы бинарны и левоассоциативны.
// Функция реализует алгоритм сортировочной станции 
// (https://ru.wikipedia.org/wiki/Алгоритм_сортировочной_станции).
//4
function compile(str) {
    let out = [];
    let stack = [];
    for (token of tokenize(str)) {
        if (isNumeric(token)) {
            out.push(token);
        } else if (isOperation(token)) {
            while (stack.length > 0 && isOperation(stack[stack.length - 1]) && priority(stack[stack.length - 1]) >= priority(token)) {
                out.push(stack.pop());
            }
            stack.push(token);
        } else if (token == '(') {
            stack.push(token);
        } else if (token == ')') {
            while (stack.length > 0 && stack[stack.length-1] != '(') {
                out.push(stack.pop());
            }
            stack.pop();
        }
    }
    while (stack.length > 0) {
        out.push(stack.pop());
    }
    return out.join(' ');
}

// Функция evaluate принимает один аргумент -- строку 
// с арифметическим выражением, записанным в обратной 
// польской нотации. Возвращаемое значение -- результат 
// вычисления выражения. Выражение может включать 
// действительные числа и операторы +, -, *, /.
// Вам нужно реализовать эту функцию
// (https://ru.wikipedia.org/wiki/Обратная_польская_запись#Вычисления_на_стеке).
//6
function evaluate(str) {
    // your code here
}

// Функция clickHandler предназначена для обработки 
// событий клика по кнопкам калькулятора. 
// По нажатию на кнопки с классами digit, operation и bracket
// на экране (элемент с классом screen) должны появляться 
// соответствующие нажатой кнопке символы.
// По нажатию на кнопку с классом clear содержимое экрана 
// должно очищаться.
// По нажатию на кнопку с классом result на экране 
// должен появиться результат вычисления введённого выражения 
// с точностью до двух знаков после десятичного разделителя (точки).
// Реализуйте эту функцию. Воспользуйтесь механизмом делегирования 
// событий (https://learn.javascript.ru/event-delegation), чтобы 
// не назначать обработчик для каждой кнопки в отдельности.
//5
function clickHandler(event) {

    let press_1 = document.querySelectorAll('.key_digit,.key_operation,.key_bracket');
    let string_enter = "";
    press_1.forEach(function(element){
        element.addEventListener('click', function() {   
            string_enter += this.value;  
            document.getElementById('out_screen').value = string_enter;
            //alert("Введено " + this.value);
        });
        
    });

    

    /*
    let press_2 = document.querySelectorAll('.key_clear');
    press_2.forEach(function(element){
        element.addEventListener('click', function() {   
             string_enter = "";
             document.getElementById('out_screen').value = string_enter;
        });
        
    });*/

    let click_clear_all = document.getElementById('b_c_all');
    click_clear_all.onclick = function() {
        string_enter = "";
        document.getElementById('out_screen').value = string_enter;
    }
    let click_clear = document.getElementById('b_c_one');
    click_clear.onclick = function() {
        string_enter = string_enter.replace(/.$/, "");
        document.getElementById('out_screen').value = string_enter;
    }


    let press_2 = document.querySelectorAll('.key_digit,.key_operation,.key_bracket');
    press_2.forEach(function(element){
        element.addEventListener('click', function() {   
            //string_enter += this.value;  
            //document.getElementById('out_screen').value = string_enter;
            //alert("Введено " + this.value);
            
        });
        
    });


    
    





































    /*
    let digit_press = document.querySelectorAll('.key_digit');
    digit_press.forEach(function(element_d){
        element_d.addEventListener('click', function() {     
            window.onload = function() {
                function strPad() {
                    document.getElementById('out_screen').value = this.value;
                }
                let bt = document.getElementsByClassName("key_digit");
                for (let i = 0; i < bt.length; i++) {
                    bt[i].onclick = strPad;
                }
              }
            //alert('digit');
            //answer_screen.classList.add('screen_digit');
      });
    });*/
    
    /*
    let digit_press = document.querySelectorAll('.key_digit');
    digit_press.forEach(function(element_d){
        element_d.addEventListener('click', function() {     
            //alert('digit');
            //answer_screen.classList.add('screen_digit');
            let str_digit = "";
            str_digit += this.value;
            document.getElementById('out_screen').value = str_digit;
        });
    });*/


    /*
    let digit_press = document.querySelectorAll('.key_digit');
    digit_press.forEach(function(element_d){
        element_d.addEventListener('click', function() {     
            //alert('digit');
            //answer_screen.classList.add('screen_digit');
            document.getElementById('out_screen').value = this.value;
      });
    });*/

    /*
    let oper_press = document.querySelectorAll('.key_operation');
    oper_press.forEach(function(element_o){
        element_o.addEventListener('click', function() {     
            //alert('operation');
            document.getElementById('out_screen').value = this.value;
      });
    });

    let click_clear = document.getElementById('b_c');
    click_clear.onclick = function() {
        //alert("clear");
    }

    let bracket_press = document.querySelectorAll('.key_bracket');
    bracket_press.forEach(function(element_b){
        element_b.addEventListener('click', function() {     
            //alert('bracket');
            
      });
    });

    let click_result = document.getElementById('bt_r');
    click_result.onclick = function() {
        //alert("result");
    }*/

    let click_result = document.getElementById('bt_r');
    click_result.onclick = function() {
        string_enter += this.value;  
        document.getElementById('out_screen').value = string_enter;
        let outt = $('#textarea').val();
        alert(outt);
    }















    /*
    let click_1 = document.getElementById('d_1');
    click_1.onclick = function() {
        alert("кнопка нажата");
    }
    let click_2 = document.getElementById('d_2');
    click_2.onclick = function() {
        alert("кнопка нажата");
    }
    let click_3 = document.getElementById('d_3');
    click_3.onclick = function() {
        alert("кнопка нажата");
    }
    let click_4 = document.getElementById('d_4');
    click_4.onclick = function() {
        alert("кнопка нажата");
    }
    let click_5 = document.getElementById('d_5');
    click_5.onclick = function() {
        alert("кнопка нажата");
    }
    let click_6 = document.getElementById('d_6');
    click_6.onclick = function() {
        alert("кнопка нажата");
    }
    let click_7 = document.getElementById('d_7');
    click_7.onclick = function() {
        alert("кнопка нажата");
    }
    let click_8 = document.getElementById('d_8');
    click_8.onclick = function() {
        alert("кнопка нажата");
    }
    let click_9 = document.getElementById('d_9');
    click_9.onclick = function() {
        alert("кнопка нажата");
    }
    let click_0 = document.getElementById('d_0');
    click_0.onclick = function() {
        alert("кнопка нажата");
    }
    let click_coma = document.getElementById('d_c');
    click_coma.onclick = function() {
        alert("кнопка нажата");
    }
    let click_clear = document.getElementById('b_c');
    click_clear.onclick = function() {
        alert("кнопка нажата");
    }
    let click_bl = document.getElementById('b_l');
    click_bl.onclick = function() {
        alert("кнопка нажата");
    }
    let click_br = document.getElementById('b_r');
    click_br.onclick = function() {
        alert("кнопка нажата");
    }
    let click_add = document.getElementById('o_a');
    click_add.onclick = function() {
        alert("кнопка нажата");
    }
    let click_sub = document.getElementById('o_s');
    click_sub.onclick = function() {
        alert("кнопка нажата");
    }
    let click_mult = document.getElementById('o_m');
    click_mult.onclick = function() {
        alert("кнопка нажата");
    }
    let click_div = document.getElementById('o_d');
    click_div.onclick = function() {
        alert("кнопка нажата");
    }
    let click_result = document.getElementById('bt_r');
    click_result.onclick = function() {
        alert("кнопка нажата");
    }
    */
    
};
    
    



// Назначьте нужные обработчики событий.
//7
window.onload = function () {

    // your code here
}


//const output = document.querySelector('output')
clickHandler();