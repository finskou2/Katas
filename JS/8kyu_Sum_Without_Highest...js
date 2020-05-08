// Sum all the numbers of the array (in F# and Haskell you get a list) except the highest and the lowest element (the value, not the index!).
// (The highest/lowest element is respectively only one element at each edge, even if there are more than one with the same value!)

const sumArray = (array) => {
  const c = array === null || array === 1 || 0 ? 0 : array.sort((sum, elem) => sum - elem).slice(1, -1).reduce((sum, elem) => elem + sum, 0)

 return c
 
}