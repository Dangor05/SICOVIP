<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <script>
                var _cedc = $(_trEdit).find('td:eq(0)').text();
         var _cedp = $(_trEdit).find('td:eq(1)').text();
         var _con = $(_trEdit).find('td:eq(2)').text();
        var _pln = $(_trEdit).find('td:eq(3)').text();
        var _fin = $(_trEdit).find('td:eq(4)').text();
        var _fol = $(_trEdit).find('td:eq(5)').text();
        var _pre = $(_trEdit).find('td:eq(6)').text();
        var _fch = $(_trEdit).find('td:eq(7)').text();
        var _imp = $(_trEdit).find('td:eq(8)').text();
        var _std = $(_trEdit).find('td:eq(9)').text();
        var _mnt = $(_trEdit).find('td:eq(10)').text();
        var _top = $(_trEdit).find('td:eq(11)').text();

       
        
        
         
        

        
        
        $('input[name="sv09npln"]').val(_pln);
        $('input[name="sv09nfol"]').val(_fol);
        $('input[name="sv09npre"]').val(_pre);
        $('input[name="sv09mnt"]').val(_mnt);
        $('input[name="sv09fvdp"]').val(_fch); 
        $('input[name="sv08conse"]').val(_con);
        $('input[name="sv01cedc"]').val(_cedc);
        $('input[name="sv03cedp"]').val(_cedp);
        $('input[name="sv04nfin"]').val(_fin);
        $('input[name="sv02code"]').val(_imp);
        $('input[name="sv02std"]').val(_std);
        $('input[name="sv07cdtp"]').val(_top);  
    </script>
</body>
</html>