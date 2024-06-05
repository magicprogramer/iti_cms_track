let btn = document.getElementById("add");
let content = document.getElementById("content");
let indx = 1;
btn.addEventListener("click",
()=>
{
    let txt = document.getElementById("tsk");
    let newdiv = document.createElement("div");
    newdiv.setAttribute("class", indx);
    let p = document.createElement("p");
    //alert(txt.value);
    p.innerText = txt.value;
    newdiv.appendChild(p);
    let delete_button = document.createElement("button");
    let done_button = document.createElement("button");
    delete_button.innerHTML = "delete";
    done_button.innerHTML = "done";
    delete_button.setAttribute("class", indx);
    done_button.setAttribute("class", indx ++);
    delete_button.addEventListener("click",
    () =>{
        let class_name = delete_button.getAttribute("class");
        newdiv.remove(document.getElementsByClassName(class_name)[0]);
    }
    );
    done_button.addEventListener('click',
    ()=>{

        let class_name = done_button.getAttribute("class");
        let required_div = document.getElementsByClassName(class_name)[0];
        required_div.classList.add("finished");
    });
    newdiv.appendChild(delete_button);
    newdiv.appendChild(done_button);
    newdiv.classList.add("task");
    content.appendChild(newdiv);
}
);