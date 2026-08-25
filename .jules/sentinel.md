## 2024-08-25 - Missing Authorization Checks in Controller
**Vulnerability:** Insecure Direct Object Reference (IDOR) in ProjectController. The controller uses implicit route model binding but lacks explicit ownership checks in show, edit, update, and destroy methods.
**Learning:** Implicit route model binding in Laravel does not automatically enforce user authorization unless explicit Policies or ownership checks are implemented.
**Prevention:** Always manually enforce ownership checks using auth()->id() for models that belong to users.
