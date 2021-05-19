/* viết một class person gồm có 3 func
 . func construction để khởi tạo, cần có tên, ngày sinh, để sử dụng hàm này dùng cú pháp: const personA=new person("Huy","17/03/2002");
 . viêt hàm tính tuổi hiện tại 
 . hàm in ra tên người và người đó bao nhiêu tuổi

*/


class Person {
    constructor (name="A",dataOfBirth="01/01/2000") {
        this.name=name;
        this.dob=dataOfBirth;
        this.calculateAge();  
    }

    calculateAge() {
        this.age=new Date().getFullYear()-this.dob.getFullYear();
    }

    showInfo() {
       console.log(`this is ${this.name}, ${this.age} years old `);
    }

}
