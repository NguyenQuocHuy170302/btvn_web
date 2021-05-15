// kiểm tra một chuỗi xem phải là số hay không

const checkNumber = (str) => {
    return ! Number.isNaN(Number.parseFloat(str));
}

// đếm số phẩn tử xuất hiện trong mảng
const countItemp = (arr,itemp) => {
    let count=0;
    for(let temp of arr) {
        if(itemp===temp) {
            count++;
        }
    }
    return count;
}

// tìm số lớn nhất trong một mảng hai chiều

const foundMax =(arr) => {

    let max=Math.max(...arr[0]);

    for(let i in arr) {a
        if(max<Math.max(...arr[i])) {
            max=Math.max(...arr[i]);
        }
    }

    return max;
}

// kiểm tra xem toàn bộ keylist có phải là khóa của obj không

const checkKey= (obj,keylist) => {
 for(let i of keylist) {
     if(obj[i]==undefined) {
         return false;
         }
    }
 return true;
}