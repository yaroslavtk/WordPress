let minus = document.querySelectorAll('.minus-button');
let plus = document.querySelectorAll('.plus-button');
let counter_number = document.querySelectorAll('.counter-number');
let chosen = document.querySelectorAll('.chosen');
let main_counter = 0;
let counter0 = 0;
let counter1 = 0;
let counter2 = 0;

plus[0].onclick = function () { 
    if (!(counter0>3) && !(main_counter>3)) {
    counter0++;
    counter_number[0].textContent = counter0;
    
    main_counter++;
    chosen[0].textContent = main_counter;
    }
    else { }
};

minus[0].onclick = function () {
    if (!(counter0<1) && !(main_counter<1)) {
        counter0--;
        counter_number[0].textContent = counter0;
        
        main_counter--;
        chosen[0].textContent = main_counter;
        }
        else { } 
    };

    plus[1].onclick = function () { 
        if (!(counter1>3) && !(main_counter>3)) {
        counter1++;
        counter_number[1].textContent = counter1;
        
        main_counter++;
        chosen[0].textContent = main_counter;
        }
        else { }
    };
    
    minus[1].onclick = function () {
        if (!(counter1<1) && !(main_counter<1)) {
            counter1--;
            counter_number[1].textContent = counter1;
            
            main_counter--;
            chosen[0].textContent = main_counter;
            }
            else { } 
        };

        plus[2].onclick = function () { 
            if (!(counter2>3) && !(main_counter>3)) {
            counter2++;
            counter_number[2].textContent = counter2;
            
            main_counter++;
            chosen[0].textContent = main_counter;
            }
            else { }
        };
        
        minus[2].onclick = function () {
            if (!(counter2<1) && !(main_counter<1)) {
                counter2--;
                counter_number[2].textContent = counter2;
                
                main_counter--;
                chosen[0].textContent = main_counter;
                }
                else { } 
            };