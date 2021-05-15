//kiểm tra một số có phải số chẵn hay không

const isEvent1=(number) => {
    if(number%2==0) {
        return true;
    }
    
    return false;
    
    }
    
    function isEvent2(number) {
        if(number2==0) {
            return true;
        }
    
        return false;
    }
    
    const isEvent= (number) => {
        return number%2===0;
    }
    
    // tính tổng bình phương các số trong mảng
    
    const sumSquare = elementArray => {
        let sum=0;
        for (let item of elementArray) {
            sum+=item*item;
        }
    
        return sum;
    }
    
    sumSquare([1,2,3]);//14
    
    //đếm số kí tự trong một chuỗi
    
    const countChar = (str) => {
        let map={};
    
        for(let char of str) {
            map[char]=(map[char]||0)+1;
        }
    
        console.log(map);
    }
    
    countChar(hello);
    
    