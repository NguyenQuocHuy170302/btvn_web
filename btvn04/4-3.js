// kiểm tra xem obj có chứa các value đã cho hay không 
    /* object là một đối tượng là một đối tượng đặc biệt có các hàm hay sử dụng với obj, vd: hàm values để triết suất tất cả các value của obj đó ra dưới dạng mảng vlaueArr
    sau khi có một moảng value của obj ta sẽ check xem tất cả các giá trị của mảng valuelist có ở trong mảng valueArr hay không*/
const checkValue = (obj,valueList) => {
    const valueArr=Object.values(obj);
    for(let val of valueList) {
        if(valueArr.indexOf(val)<0)
            return false;
    }
    return true;
}

// check xem object nào có age >30 thì sẽ gán cho thuộc tính category là "old"

const addCategory = (objList) => {
 for(let obj of objList) {
     if(obj.age>30) {
         obj.caterogy="old";
         }
    }
}

// cũng giống hàm phía trên nhưng sẽ tạo ra một objlist mới
const makeNewObjBeforeAddCategory = (objList) => {
    let objlListReturn=[];

    for(let obj of objList) {

        let newObj={...obj};
        if(obj.age>30) {
            newObj.caterogy="old";
        }
        objlListReturn.push(newObj);
    }
    return objlListReturn;
}
