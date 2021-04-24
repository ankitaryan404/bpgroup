function funsearch(type)
{
    var search_str=$('#search_str').val();
    if(search_str!='')
    {
        window.location.href='/admin/'+type+'/search/'+search_str;
    }
}
// function funsearchres()
// {
//     var search_str=$('#search_str').val();
//     if(search_str!='')
//     {
//         window.location.href='/admin/residential/search/'+search_str;
//     }
// }