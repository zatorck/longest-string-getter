# Longest String Getter
Task #2 

## Test proposals
#### 1
    function testThrowOfInvalidArgumentException(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Class::getLongestString('1', 2);
    }
    
#### 2
    function testFoundedLognestString(): void
    {
        $this->assertEquals(
            '12345678',
            Class::getLongestString('1', '12', '123456', '12345678');
        );
    }
        