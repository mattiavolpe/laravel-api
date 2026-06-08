## 2026-06-08 - IDOR in ProjectController
**Vulnerability:** ProjectController lacked authorization checks for show, edit, update, and destroy actions.
**Learning:** Implicit route model binding does not automatically verify ownership, exposing endpoints to Insecure Direct Object Reference (IDOR).
**Prevention:** Always implement explicit ownership checks (or Laravel Policies) for all user-specific resources retrieved via implicit route binding.