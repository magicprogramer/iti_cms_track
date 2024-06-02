let arr = new Array();
for (let i = 0; i < 5; i ++)
{
    arr[i] = prompt("enter " + (i + 1) + " number : ");
    arr[i] = parseInt(arr[i]);
}

document.write("task 3 <hr>");
document.write("You have entered : ");
for (let i = 0; i < 5; i ++)document.write(arr[i] + " ");
arr.sort(
    function(a, b)
    {
        return b - a;
    }
)
document.write("<br>");
document.write("ur values after being sorted descending ");
for (let i = 0; i < 5; i ++)document.write(arr[i] + " ");
document.write("<br>");
arr.sort(
    function(a, b)
    {
        return a - b;
    }
)
document.write("\n");
document.write("ur values after being sorted ascending ");
for (let i = 0; i < 5; i ++)document.write(arr[i] + " ");

