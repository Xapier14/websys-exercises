const INPUT_1 = "GAGCCTACTAACGGGAT";
const INPUT_2 = "CATCGTAATGACGGCCT";

function hammingDistance(input1, input2) {
  if (input1.length != input2.length) return undefined;
  let diff = 0;
  for (let i = 0; i < input1.length; ++i)
    diff += input1[i] != input2[i] ? 1 : 0;
  return diff;
}

console.log(hammingDistance(INPUT_1, INPUT_2));
