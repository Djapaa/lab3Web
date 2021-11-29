

// function equals(){
//     let exp = document.form.textview.value;
//     if(exp){
//        return document.form.textview.value = eval(document.form.textview.value)
//     }
// }



function add(value) {
    let inputValue = document.getElementById("textview");
    if (isDontHaveOperation(inputValue.value, value)) {
      inputValue.value += value;
    }
  }
  
  function che() {
    var res = [];
    var answer;
  
    if (document.getElementById("textview").value.includes("+")) {
      res = document.getElementById("textview").value.split('+');
      return answer = parseFloat(res[0]) + parseFloat(res[1]);
    }
  
  
    if (document.getElementById("textview").value.includes("-")) {
      res = document.getElementById("textview").value.split('-');
      return answer = parseFloat(res[0]) - parseFloat(res[1]);
    }
  
    if (document.getElementById("textview").value.includes("/")) {
      res = document.getElementById("textview").value.split('/');
      return answer = parseFloat(res[0]) / parseFloat(res[1]);
    }
  
    if (document.getElementById("textview").value.includes("*")) {
      res = document.getElementById("textview").value.split('*');
      return answer = parseFloat(res[0]) * parseFloat(res[1]);
    }
    if (document.getElementById("textview").value.includes("%")) {
      res = document.getElementById("textview").value.split('%');
      return answer = parseFloat(res[0]) % parseFloat(res[1]);
    } else {
      return answer = document.getElementById("textview").value;
    }
  }
  
  function equals() {
    var a = che()
    document.getElementById('textview').value = a;
  }
  
  
  function clean() {
    document.getElementById('textview').value = " ";
  }
  
  
  function backspace() {
    let exp = document.getElementById('textview').value;
    return document.getElementById('textview').value = exp.slice(0, -1);
  }
  
  const onlyNumber = e => {
    const value = e.value;
    e.value = value.replace(/\D/g, '')
  }
  
  function degree() {
  
    return document.getElementById('textview').value =
      parseFloat(document.getElementById("textview").value) ** 2;
  
  }
  
  function isDontHaveOperation(inputValue, newValue)
  {
  const operation = ["+","-","*","/","%"];
  return operation.includes(newValue) ? inputValue.split("")
  .filter(c => operation.includes(c)).length < 1 : true;
   
  }