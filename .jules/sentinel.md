## 2024-11-04 - Fix IDOR in Project Controller
**Vulnerability:** IDOR in ProjectController allowing users to view, edit, and delete other users' projects via route model binding.
**Learning:** Implicit route model binding does not automatically scope queries to the authenticated user unless explicitly configured or checked.
**Prevention:** Always manually enforce explicit ownership checks for user-specific resources when using implicit route model binding.
