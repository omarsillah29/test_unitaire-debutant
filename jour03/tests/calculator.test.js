const { calculate } = require('../calculator');

describe('Tests de la calculatrice JavaScript', () => {

    test('Addition', () => {
        expect(calculate('2+3')).toBe(5);
    });

    test('Soustraction', () => {
        expect(calculate('5-2')).toBe(3);
    });

    test('Multiplication', () => {
        expect(calculate('4*3')).toBe(12);
    });

    test('Division', () => {
        expect(calculate('12/3')).toBe(4);
    });


    test('Parenthèses', () => {
        expect(calculate('(2+3)*4')).toBe(20);
    });

    test('Expression invalide', () => {
        expect(() => calculate('2+bad'))
            .toThrow('Expression invalide');
    });

//     // Bonus
//     test('Chaîne vide', () => {
//         expect(calculate('')).toBeUndefined();
//     });

 });