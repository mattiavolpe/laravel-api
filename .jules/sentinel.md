## 2024-10-27 - Fix IDOR in Project Controller
**Vulnerability:** Insecure Direct Object Reference (IDOR) in ProjectController allowing users to access, modify or delete projects owned by other users.
**Learning:** Implicit route model binding does not check user ownership by default, leading to IDOR if the identifier is guessed and no explicit check is present.
**Prevention:** Always implement explicit ownership checks (e.g., `$model->user_id != auth()->id()`) or use Laravel Policies when exposing user-specific resources.
