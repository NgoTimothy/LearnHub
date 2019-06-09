describe("If you type in the Username field ", ()=>{
    it("between 5-20 letters, your username should be valid",()=>{
               
        const validTest = usernameInput(15);
        expect(validTest).toBe(true);
    });
    it("under 5 letters, your username should be invalid",()=>{
        const validTest = usernameInput(1);
        expect(validTest).toBe(false);
    });
    it("over 20 letters, your username should be invalid",()=>{
        const validTest = usernameInput(21);
        expect(validTest).toBe(false);
    });
});

describe("If you type in the Email field ", ()=>{
    it("something before the @ symbol, your email should be valid",()=>{
        const validTest = emailInput("test@iastate.edu");
        expect(validTest).toBe(true);
    });
        it("a valid hosting service, your email should be valid",()=>{
        const validTest = emailInput("test@iastate.edu");
        expect(validTest).toBe(true);
    });
    it("a valid ending signature, your email should be valid",()=>{
        const validTest = emailInput("test@iastate.edu");
        expect(validTest).toBe(true);
    });
    it("nothing before the @ symbol, your email should be invalid",()=>{
        const validTest = emailInput("@iastate.edu");
        expect(validTest).toBe(false);
    });
        it("an invalid hosting service, your email should be valid",()=>{
        const validTest = emailInput("test@.edu");
        expect(validTest).toBe(false);
    });
    it("an invalid ending signature, your email should be invalid",()=>{
        const validTest = emailInput("test@iastate.");
        expect(validTest).toBe(false);
    });
});

describe("If you type in the Phone field ", ()=>{
    it("a 10 digit phone number with dashes, your phone should be valid",()=>{
        const validTest = phoneInput("111-222-3333");
        expect(validTest).toBe(true);
    });
    it("a 10 digit phone number without dashes, your phone should be valid",()=>{
        const validTest = phoneInput("1112223333");
        expect(validTest).toBe(true);
    });
    it("a non 10 digit phone number without dashes, your phone should be invalid",()=>{
        const validTest = phoneInput("1");
        expect(validTest).toBe(false);
    });
    it("a non 10 digit phone number with dashes, your phone should be invalid",()=>{
        const validTest = phoneInput("1-1-1-1-1");
        expect(validTest).toBe(false);
    });
});

describe("If you type in the Password field ", ()=>{
    it("a lower case letter, your password should be valid",()=>{
        const validTest = passwordInput("aA3#aaaaaa");
        expect(validTest).toBe(true);
    });
    it("an upper case letter, your password should be valid",()=>{
        const validTest = passwordInput("aA3#aaaaaa");
        expect(validTest).toBe(true);
    });
    it("a special character, your password should be valid",()=>{
        const validTest = passwordInput("aA3#aaaaaa");
        expect(validTest).toBe(true);
    });
    it("a number, your password should be valid",()=>{
        const validTest = passwordInput("aA3#aaaaaa");
        expect(validTest).toBe(true);
    });
    it("a number of letters between 8-15, your password should be valid",()=>{
        const validTest = passwordInput("aA3#aaaaaa");
        expect(validTest).toBe(true);
    });
    it("no lower case letter, your password should be invalid",()=>{
        const validTest = passwordInput("PPPPPPPPP");
        expect(validTest).toBe(false);
    });
    it("no upper case letter, your password should be invalid",()=>{
        const validTest = passwordInput("aaaaaaaaaaa");
        expect(validTest).toBe(false);
    });
        it("no upper case letter, your password should be invalid",()=>{
        const validTest = passwordInput("a3#aaaaaa");
        expect(validTest).toBe(false);
    });
    it("no special character, your password should be invalid",()=>{
        const validTest = passwordInput("aA3aaaaaa");
        expect(validTest).toBe(false);
    });
    it("no number, your password should be invalid",()=>{
        const validTest = passwordInput("aA#aaaaaa");
        expect(validTest).toBe(false);
    });
    it("a number of characters less than 8 or greater than 15, your password should be invalid",()=>{
        const validTest = passwordInput("j");
        expect(validTest).toBe(false);
    });
});
describe("If you type in the Confirm Password field ", ()=>{
    it("the same password you typed in the Password field, your password should be valid",()=>{
        const validTest = confirmInput("aA3#aaaaaa");
        expect(validTest).toBe(true);
    });
});