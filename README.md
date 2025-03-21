# 📧 Email Spoof Check

This PHP script helps you to check if an email is spoofed by analyzing the email headers for SPF, DKIM, and DMARC authenticity. It also checks for mismatches between the "From" and "Return-Path" fields.

## 🚀 Features

- ✅ **SPF Check**: Verifies if the email passed the Sender Policy Framework.
- ✅ **DKIM Check**: Verifies if the email passed the DomainKeys Identified Mail.
- ✅ **DMARC Check**: Verifies if the email passed the Domain-based Message Authentication, Reporting, and Conformance.
- 🔴 **Mismatch Check**: Checks if the "From" and "Return-Path" fields match.

## 🛠️ Usage

1. **Clone the repository:**
    ```bash
    git clone https://github.com/yourusername/email-spoof-checker.git
    cd email-spoof-check
    ```

2. **Run the script:**
    Make sure you have a local server running (e.g., XAMPP, WAMP, or MAMP) and place the script in your server's root directory.

3. **Access the script through your browser:**
    Open your browser and navigate to `http://localhost/email-spoof-checker`.

4. **Paste the email header and check:**
    - Paste the email header in the provided textarea.
    - Click the "Check Email" button to analyze the email.

## 📋 Example Email Header

```
Received: from mail.example.com (mail.example.com [192.0.2.1])
    by mail.yourdomain.com (Postfix) with ESMTP id 1234567890
    for <you@yourdomain.com>; Tue, 20 Mar 2025 12:34:56 -0700 (PDT)
Received: from legitimate-domain.com (legitimate-domain.com [203.0.113.1])
    by mail.example.com (Postfix) with ESMTP id 0987654321
    for <you@yourdomain.com>; Tue, 20 Mar 2025 12:34:55 -0700 (PDT)
From: "Legitimate Sender" <contact@legitimate-domain.com>
Reply-To: "Legitimate Sender" <contact@legitimate-domain.com>
Subject: Important Update
DKIM-Signature: v=1; a=rsa-sha256; c=relaxed/relaxed;
    d=legitimate-domain.com; s=selector1;
    h=from:to:subject:date:message-id:mime-version;
    bh=abcdefg1234567890=;
    b=abcdefghijklmnopqrstuvwxyz1234567890;
```

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🤝 Contributing

Contributions are welcome! Please read the [CONTRIBUTING](CONTRIBUTING.md) guidelines first.

## 💬 Contact

For any questions or suggestions, feel free to open an issue or contact me at [coderprasant](mailto:coderprasant@gmail.com).
