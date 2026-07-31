## 2026-07-31 - IDOR via Implicit Route Model Binding
**Vulnerability:** IDOR in ProjectController where users could access/modify other users' projects via implicit route model binding.
**Learning:** The application frequently relies on implicit route model binding without Laravel Policies, making controllers vulnerable to IDOR unless manual ownership checks are enforced.
**Prevention:** Always verify user ownership using `auth()->id()` before processing requests on implicitly bound models (except for shared taxonomy models like Type or Technology).
