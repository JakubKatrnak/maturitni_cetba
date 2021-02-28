import 'package:flutter/material.dart';
import 'package:projekt_prj/library_pages/home.dart';
import 'package:projekt_prj/loading.dart';

void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: Home(),
    );
  }
}



