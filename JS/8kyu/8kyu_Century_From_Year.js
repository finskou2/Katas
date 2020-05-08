// The first century spans from the year 1 up to and including the year 100, The second - from the year 101 up to and including the year 200, etc.

// Task :
// Given a year, return the century it is in.


const century = year => {
  const result = String(year / 100).split('.')
  return result.length === 2 ? Number(result[0]) + 1 : Number(result[0]) }

//const century = year => Math.ceil(year/100)