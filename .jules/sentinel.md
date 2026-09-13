## 2024-10-24 - Fix IDOR in Project Controller
**Vulnerability:** Insecure Direct Object Reference (IDOR) allows users to view, edit, update, or delete projects belonging to other users.
**Learning:** Implicit route model binding does not verify user ownership by default.
**Prevention:** Explicitly verify resource ownership against the authenticated user for resources tied to users.
