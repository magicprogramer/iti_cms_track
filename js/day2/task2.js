function find(txt)
{
    let arr = txt.split(" ");
    let ansr = "";
    console.log(arr);
    for (let i = 0; i < arr.length; i ++)
    {
        let text = arr[i];
        if (text.length > ansr.length)ansr = text;
    }
    return ansr;
}
document.write("task 2 <hr>");
document.write(find("this is a javascript string demo"));