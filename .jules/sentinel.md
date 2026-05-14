## 2024-05-24 - Initial Setup
**Vulnerability:** None
**Learning:** Sentinel initialized.
**Prevention:** N/A

## 2024-05-24 - Fix IDOR in Controller Methods
**Vulnerability:** IDOR (Insecure Direct Object Reference)
**Learning:** Implicit route model binding does not enforce authorization, allowing users to manipulate records owned by other users.
**Prevention:** Use Explicit Ownership Checks (e.g., if ($model->user_id != auth()->id()) abort(403);) at the start of relevant controller methods.
