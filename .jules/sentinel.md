## 2024-11-07 - IDOR in Project Controller
**Vulnerability:** Insecure Direct Object Reference (IDOR) allowed any authenticated user to view, edit, update, or delete any project by guessing its slug, because route model binding does not automatically verify ownership in standard controller methods.
**Learning:** Implicit route model binding retrieves the model based on the URL parameter, but without a global scope or explicit ownership checks in the controller, it returns models belonging to other users.
**Prevention:** Always implement explicit authorization checks (e.g., comparing user_id) or use Laravel Policies when accessing resources that belong to specific users.
