// sắp xếp list theo chiều tăng dần hoạc giảm dần. sử dụng thuật toán sắp xếp nổi bọt

const sortList = (arr) => {
    for(let key1=0;key1<arr.length-1;key1++) {
        for(let key2=key1+1;key2<arr.length;key2++) {
            if(arr[key1]>arr[key2]) {
                let temp=arr[key1];
                arr[key1]=arr[key2];
                arr[key2]=temp;
            }
        }
    }
}

// sắp xếp một objlist theo điều kiện nào đó

const sortObjList = (objList) => {
 for(let key1=0; key1<objList.length-1;key1++) {
     for(let key2=key1+1; key2<objList.length;key2++) {
            if(objList[key1].age>objList[key2].age) {
                let temp=objList[key1];
                objList[key1]=objList[key2];
                objList[key2]=temp;
            }
        }
    }
}
