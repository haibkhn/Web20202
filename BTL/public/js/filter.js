const searchWrapper = document.querySelector('.search-input')
const inputBox = searchWrapper.querySelector('input');
const suggBox = document.querySelector('.autocom-box');

inputBox.onkeyup = (e) => {
    let userData = e.target.value;
    let emptyArray = [];
    if(userData){
        emptyArray = suggestions.filter((data)=>{
            // filter du lieu
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
        });
        emptyArray = emptyArray.map((data)=>{
            return data = '<li>' + data + '</li>';
        });
        // console.log(emptyArray);
        searchWrapper.classList.add('active');
        // hien autocomplete
        showSuggestion(emptyArray);
        let allList = suggBox.querySelectorAll("li");
        for (let i = 0; i < allList.length; i++) {
            allList[i].setAttribute("onclick", "select(this)");
            
        }
    }
    else {
        // an autocomplete
        searchWrapper.classList.remove("active");
    }
    
}

function select(element) {
    let selectUserData = element.textContent;
    inputBox.value = selectUserData; //cho vao o tim kiem
    searchWrapper.classList.remove("active");
}

function showSuggestion(list){
    let listData;
    if(!list.length){
        userValue = inputBox.value;
        listData = '<li>' + userValue + '</li>';
    }
    else {
        listData = list.join('');
    }
    suggBox.innerHTML = listData;
}

