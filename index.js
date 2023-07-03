

var leftRightDifference = function(nums) {
  let leftArr = [0];
  let rightArr = [];
  let diffarr = [];
  let a = 0;
  let b = 0;

  for (let i = 0; i <nums.length-1; i++) {
    a += nums[i]; 
    leftArr = leftArr.concat(a);
    console.log(leftArr);
  }

  for (let i = nums.length-1; 0<i; i--) {
    b += nums[i]; 
    rightArr = rightArr.concat(a);
    console.log(leftArr);
  }
};

console.log(leftRightDifference([10,4,8,3]));