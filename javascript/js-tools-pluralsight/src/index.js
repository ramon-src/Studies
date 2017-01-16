import './index.css'

import numeral from 'numeral';

const courseValue = numeral(1000).format('$0,0.00');

//debugger; command for sourcemaps

//ES6 `` to show the variables inside the string
console.log(`I would pay ${courseValue} for this awesome course!`);
