## 2026-04-09 - [IDOR in Controller Methods]
**Vulnerability:** IDOR vulnerabilities in admin controllers due to missing authorization checks.
**Learning:** The application utilizes implicit route model binding in controllers without implementing Laravel Policies, leaving it susceptible to IDOR unless explicit ownership checks are manually enforced.
**Prevention:** Implement Laravel Policies or manual ownership checks () in all controller methods.
## 2025-04-09 - [IDOR in Controller Methods]
**Vulnerability:** IDOR vulnerabilities in admin controllers due to missing authorization checks.
**Learning:** The application utilizes implicit route model binding in controllers without implementing Laravel Policies, leaving it susceptible to IDOR unless explicit ownership checks are manually enforced. Also, Type and Technology models are user-owned entities in this app, verified by checking their $fillable and user() methods.
**Prevention:** Implement Laravel Policies or manual ownership checks in all controller methods that interact with user-owned models.
