# Caesar Cipher Program in Python

def encrypt(text, shift):
    encrypted_text = ""
    for char in text:
        if char.isalpha():  # Only shift letters
            start = ord('A') if char.isupper() else ord('a')
            encrypted_text += chr((ord(char) - start + shift) % 26 + start)
        else:
            encrypted_text += char  # Non-alphabet characters stay the same
    return encrypted_text

def decrypt(text, shift):
    return encrypt(text, -shift)  # Decrypt by shifting backward

# Take input from the user
text = input("Enter the text you want to encrypt: ")
shift = int(input("Enter the shift value: "))

# Encrypt the text
encrypted_text = encrypt(text, shift)
print("Encrypted text:", encrypted_text)

# Decrypt the text
decrypted_text = decrypt(encrypted_text, shift)
print("Decrypted text:", decrypted_text)
