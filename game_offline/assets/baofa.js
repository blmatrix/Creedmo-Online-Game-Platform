function formatDate(date) {
   var mymonth = date.getMonth() + 1;
 var myweekday = date.getDate();
   return (date.getFullYear() + "-" + ((mymonth < 10) ? "0" : "") + mymonth + "-" + ((myweekday < 10) ? "0" : "") + myweekday);
	
//	var yyyy = date.getFullYear().toString();
//    var mm = (date.getMonth() + 1).toString();
//    var dd = date.getDate().toString();
//
//
//    return yyyy + (mm[1] ? mm : '0'+mm[0]) + (dd[1] ? dd : '0'+dd[0]);
}

function SetYesterday(begin, end) {
    var obj1 = document.getElementById(begin);
    var obj2 = document.getElementById(end);

    var mydate = new Date();
    mydate.setDate(mydate.getDate() - 1);

    obj1.value = formatDate(mydate);
    if (obj2 != null) {
        obj2.value = obj1.value;
    }
}

function SetWeek(begin, end) {
    var obj1 = document.getElementById(begin);
    var obj2 = document.getElementById(end);

    var now = new Date();
    var nowDayOfWeek = now.getDay();
    var nowDay = now.getDate();
    var nowMonth = now.getMonth();
    var nowYear = now.getYear();
    nowYear += (nowYear < 2000) ? 1900 : 0;
    var weekStartDate = new Date(nowYear, nowMonth, nowDay - nowDayOfWeek);
    var weekEndDate = new Date(nowYear, nowMonth, nowDay + (6 - nowDayOfWeek));

    obj1.value = formatDate(weekStartDate);
    obj2.value = formatDate(weekEndDate);
}

function SetPrevWeek(begin, end) {
    var obj1 = document.getElementById(begin);
    var obj2 = document.getElementById(end);
    
    var d2,d22;
    d2 = new Date();
    var dayOfweeks = d2.getDate();
    
    d22 = new Date();
    d22.setDate(dayOfweeks - 1);
    
    obj1.value = formatDate(d22);
    obj2.value = formatDate(d22);

  ;
}

function Set7Days(begin, end) {
    var obj1 = document.getElementById(begin);
    var obj2 = document.getElementById(end);

    var mydate = new Date();
    mydate.setDate(mydate.getDate() - 7);

    obj1.value = formatDate(mydate);
    obj2.value = formatDate(new Date());
}

function Set30Days(begin, end) {
    var obj1 = document.getElementById(begin);
    var obj2 = document.getElementById(end);

    var mydate = new Date();
    mydate.setDate(mydate.getDate() - 30);

    obj1.value = formatDate(mydate);
    obj2.value = formatDate(new Date());
}

function Set90Days(begin, end) {
    var obj1 = document.getElementById(begin);
    var obj2 = document.getElementById(end);

    var mydate = new Date();
    mydate.setDate(mydate.getDate() - 90);

    obj1.value = formatDate(mydate);
    obj2.value = formatDate(new Date());
}

// 이번달
function SetCurrentMonthDays(begin, end) {
    var obj1 = document.getElementById(begin);
    var obj2 = document.getElementById(end);

    var d2, d22;
    d2 = new Date();
    d22 = new Date(d2.getYear(), d2.getMonth());
    
    var d3, d33;
    d3 = new Date();
    d33 = new Date(d3.getYear(), d3.getMonth() + 1, "");
    
    obj1.value = formatDate(d22);
    obj2.value = formatDate(d33);
}

// 이전달
function SetPrevMonthDays(begin, end) {
    var obj1 = document.getElementById(begin);
    var obj2 = document.getElementById(end);

    var d2, d22;
    d2 = new Date();
    d22 = new Date(d2.getYear(), d2.getMonth() -1);

    var d3, d33;
    d3 = new Date();
    d33 = new Date(d3.getYear(), d3.getMonth(), "");

    obj1.value = formatDate(d22);
    obj2.value = formatDate(d33);
}